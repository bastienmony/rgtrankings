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

while($row = 1->fetch_assoc()) {
echo "<tr><td>" . $row["Rank"]. "</td><td>" . $row["Name"] . "</td><td>" . $row["Nationality"] . "</td><td>". $row["Score"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }


?>

</table>
</body>
</html>



