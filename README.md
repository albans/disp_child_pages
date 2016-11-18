# disp-child-pages wordpress plugin

This is a very simple wordpress plugin. It provides a short code to display the
list of child pages.

The plugin displays the title and the thumbnail of each child page, wrapped in a
link. The result is easy to style using custom CSS

# Usage

- Clone this project in your `wp-content/plugins` directory
- Activate the plugin
- Modify you stylesheet to customize the rendering
- Insert the short code `[disp_child_pages]` in any page, where the list of child
pages is wanted

For example, you may use the following CSS to display each page as a box
containing the title and the thumbnail:

```css
.child-thumb {
	margin: 20px 5px 0;
	float: left;
	text-align: center;
	border: solid 1px lime;
	border-radius: 10px;
	height: 130px;
	width: 150px;
	overflow: hidden;
}

.child-thumb img {
	max-width: 100%;
}
```
