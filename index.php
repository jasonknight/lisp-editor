<!doctype html>

<title>CodeMirror: Autocomplete Demo</title>
<meta charset="utf-8"/>
<link rel="stylesheet" href="/style.css" />
<link rel="stylesheet" href="/CodeMirror/lib/codemirror.css">
<link rel="stylesheet" href="/CodeMirror/addon/hint/show-hint.css">
<script src="/CodeMirror/lib/codemirror.js"></script>
<script src="/CodeMirror/addon/hint/show-hint.js"></script>
<script src="/CodeMirror/addon/hint/javascript-hint.js"></script>
<script src="/CodeMirror/mode/javascript/javascript.js"></script>

<div id=nav>
  <h3>This project proudly uses:</h3>
  <a href="http://codemirror.net"><h1>CodeMirror</h1><img id=logo src="/CodeMirror/doc/logo.png"></a>

  <ul>
    <li><a href="index.php">Home</a>
    <li><a href="/CodeMirror/doc/manual.html">Manual</a>
    <li><a href="https://github.com//CodeMirror/codemirror">Code</a>
  </ul>
</div>

<article>
<h2>Autocomplete Demo</h2>
<form><textarea id="code" name="code" rows="50" cols="65">

</textarea></form>

<p>Press <strong>ctrl-space</strong> to activate autocompletion. Built
on top of the <a href="/CodeMirror/doc/manual.html#addon_show-hint"><code>show-hint</code></a>
and <a href="/CodeMirror/doc/manual.html#addon_javascript-hint"><code>javascript-hint</code></a>
addons.</p>

    <script>
      var editor = CodeMirror.fromTextArea(document.getElementById("code"), {
        lineNumbers: true,
        extraKeys: {"Ctrl-Space": "autocomplete"},
        mode: {name: "javascript", globalVars: true}
      });
    </script>
  </article>
