# Craft Fetch

Twig Extension that relays PHP `file_get_contents()` and return the contents in raw format to template. Use with care. Useful if you want to embed external svg code inline in templates.

```
<figure class="c-icon">
  {{ fetch(svg.url) }}
</figure>
```
