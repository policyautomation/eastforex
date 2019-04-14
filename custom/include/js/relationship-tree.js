document.addEventListener("DOMContentLoaded", function (event) {

    //Read params from the URL
    let url_string = window.location.href;
    let url = new URL(url_string);
    const ParentModule = url.searchParams.get("parent_module");
    const ParentRecordID = url.searchParams.get("parent_record_id");

    //construct URL to fetch JSON data for the tree
    let JsonDataCall = "index.php?module=Accounts" +
        "&action=getJSONforRelationshipTree" +
        "&to_pdf=true" +
        "&parent_module=" + ParentModule +
        "&parent_record_id=" + ParentRecordID;

    //fetch JSON data
    fetch(JsonDataCall)
        .then(response => response.json())
        .then(data => {
            //console.log(JSON.stringify(data));
            RenderTree(data);
        })
        .catch(error => console.error(error));


    //function to render the tree
    function RenderTree(data) {
        // create a name: node map
        const dataMap = data.reduce(function (map, node) {
            map[node.name] = node;
            return map;
        }, {});

        // create the tree array
        const treeData = [];
        data.forEach(function (node) {
            // add to parent
            var parent = dataMap[node.parent];
            if (parent) {
                // create child array if it doesn't exist
                (parent.children || (parent.children = []))
                // add node to child array
                    .push(node);
            } else {
                // parent is null or missing
                treeData.push(node);
            }
        });


        let margin = {
                  top: 20
                , right: 120
                , bottom: 20
                , left: 120
            },
            width = 1300 - margin.right - margin.left,
            height = 700 - margin.top - margin.bottom;

        let i = 0;

        let tree = d3.layout.tree().size([height, width]);

        const diagonal = d3.svg.diagonal()
            .projection(function (d) {
                return [d.y, d.x];
            });

        const svg = d3.select("body").append("svg")
            .attr("width", width + margin.right + margin.left)
            .attr("height", height + margin.top + margin.bottom)
            .append("g")
            .attr("transform", "translate(" + margin.left + "," + margin.top + ")");

        root = treeData[0];

        update(root);

        function update(source) {


            // Compute the new tree layout.
            let nodes = tree.nodes(root).reverse(),
                links = tree.links(nodes);

            // Normalize for fixed-depth.
            nodes.forEach(function (d) {
                d.y = d.depth * 300;
            });

            // Declare the nodes…
            let node = svg.selectAll("g.node")
                .data(nodes, function (d) {
                    return d.id || (d.id = ++i);
                });

            // Enter the nodes.
            let nodeEnter = node.enter().append("g")
                .attr("class", "node")
                .attr("transform", function (d) {
                    return "translate(" + d.y + "," + d.x + ")";
                });


            nodeEnter.append("image")
                .attr("xlink:href", function (d) { return d.image_path })
                .attr("x", -8)
                .attr("y", -8)
                .attr("width", 16)
                .attr("height", 16)
                .on("click", function (d) {
                clickFunction(d);
            });

            nodeEnter.append("text")
                .attr("x", function (d) {
                    return d.children || d._children ? -20 : 20;
                })
                .attr("dy", ".35em")
                .attr("text-anchor", function (d) {
                    return d.children || d._children ? "end" : "start";
                })
                .html(function (d) {
                    return d.label;
                })
                .on("click", function (d) {
                    clickFunction(d);
                })
                .style("fill-opacity", 1);

            // Declare the links…
            var link = svg.selectAll("path.link")
                .data(links, function (d) {
                    return d.target.id;
                });

            // Enter the links.
            link.enter().insert("path", "g")
                .attr("class", "link")
                .attr("d", diagonal);

            function clickFunction(d) {
                window.open(d.redirect_url, "_blank");
            }

        }
    }


});
