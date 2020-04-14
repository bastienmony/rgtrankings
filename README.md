## Welcome to GitHub Pages

You can use the [editor on GitHub](https://github.com/bastienmony/rgtrankings/edit/master/README.md) to maintain and preview the content for your website in Markdown files.

Whenever you commit to this repository, GitHub Pages will run [Jekyll](https://jekyllrb.com/) to rebuild the pages in your site, from the content in your Markdown files.

### Markdown

Markdown is a lightweight and easy-to-use syntax for styling your writing. It includes conventions for

```markdown
Syntax highlighted code block

# Header 1
## Header 2
### Header 3

- Bulleted
- List

1. Numbered
2. List

**Bold** and _Italic_ and `Code` text

[Link](url) and ![Image](src)
```

For more details see [GitHub Flavored Markdown](https://guides.github.com/features/mastering-markdown/).

### Jekyll Themes

Your Pages site will use the layout and styles from the Jekyll theme you have selected in your [repository settings](https://github.com/bastienmony/rgtrankings/settings). The name of this theme is saved in the Jekyll `_config.yml` configuration file.

### Support or Contact

Having trouble with Pages? Check out our [documentation](https://help.github.com/categories/github-pages-basics/) or [contact support](https://github.com/contact) and we’ll help you sort it out.


<html>
<head>
	<title>RGT Ranking</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 12px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<h3>General Ranking</h3>
<table>
<tr>
<th>Rank</th>
<th>Name</th>
<th>Nationality</th>
<th>Score</th>
</tr>
<?php

$elements = [];

    // An array of 10,000 elements with random string values
    for ($i = 0; $i < 10000; $i++) {
            $elements[] = (string) rand(10000000, 99999999);
    }

    $numberOfElements = count($elements);
    $numberOfElements2 = $numberOfElements;
    
    // for test
    $timeStart = microtime(true);
    
    for ($i = 0; $i < $numberOfElements; $i++) { }

    $timeEnd = microtime(true);
    $for_time = $timeEnd - $timeStart;

    // foreach test
    $timeStart = microtime(true);

    foreach ($elements as $element) { }

    $timeEnd = microtime(true);
    $foreach_time = $timeEnd - $timeStart;

    // while test
    $timeStart = microtime(true);

    while ($numberOfElements-- > 0) { }

    $timeEnd = microtime(true);
    $whileTime = $timeEnd - $timeStart;
    
    // do-while test
    $timeStart = microtime(true);

    do { }
    while ($numberOfElements2-- > 0);

    $timeEnd = microtime(true);
    $d0WhileTime = $timeEnd - $timeStart;
    
    echo "For took: " . number_format($for_time * 1000, 3) . "ms <br>";
    echo "Foreach took: " . number_format($foreach_time * 1000, 3) . "ms <br>";
    echo "While took: " . number_format($whileTime * 1000, 3) . "ms <br>";
    echo "Do-while took: " . number_format($d0WhileTime * 1000, 3) . "ms <br>";
?>
</table>
</body>
</html>



