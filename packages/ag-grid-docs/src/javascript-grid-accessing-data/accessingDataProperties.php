<?php

$getRowNodeApi = [
    ['getRowNode(id)',
    'Returns the row node with the given ID. The row node id is the one you provide with the callback <code>getRowNodeId(data)</code>, otherwise the id is a number auto generated by the grid when the row data is set.'
    ],
    ['forEachNode((node, index))',
    'Iterates through each node (row) in the grid and calls the callback for each node. This works similar to the \'forEach\' method on a Javascript array. This is called for every node, ignoring any filtering or sorting applied within the grid. If using infinite row model, then gets called for each page loaded in the page cache.'
    ],
    ['forEachNodeAfterFilter((node, index))',
    'Similar to forEachNode, except skips any filtered out data.'
    ],
    ['forEachNodeAfterFilterAndSort((node, index))',
    'Similar to forEachNode, except skips any filtered out data and each the callback is called in the order the rows are displayed in the grid.'
    ],
    ['forEachLeafNode((node, index))',
    'Similar to forEachNode, except lists all the leaf nodes. This effectively goes through all the data that you provided the grid before the grid did any grouping. If doing tree data, then goes through all the nodes for data you provided, including nodes that have children, but excluding groups the grid created where gaps were missing in the hierarchy.'
    ],
    ['getDisplayedRowAtIndex(index)',
    'Returns the displayed rowNode at the given index.'
    ],
    ['getDisplayedRowCount()',
    'Returns the total number of displayed rows.'
    ],
    ['getFirstDisplayedRow(excludeBuffer?)',
    'Get the index of the first displayed row due to scrolling (includes not visible rendered rows in the buffer). If excludeBuffer set to true, will exclude the rows that do not appear on the screen (but are rendered due to buffer)'
    ],
    ['getLastDisplayedRow(excludeBuffer?)',
    'Get the index of the last displayed row due to scrolling (includes not visible rendered rows in the buffer). If excludeBuffer set to true, will exclude the rows that do not appear on the screen (but are rendered due to buffer)'
    ]
];

?>