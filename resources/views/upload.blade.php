@extends('include/head')

<h1>Upload</h1>

<script type="text/javascript" src="{{ asset('/admin/js/tinymce/tinymce.min.js') }}"></script>

<script>
  tinymce.init({
    selector: '#editor1',
    plugins: "image imagetools",
    file_browser_callback : elFinderBrowser
  });

  function elFinderBrowser(field_name, url, type, win) {
    tinymce.activeEditor.windowManager.open({
      file: '<?= route('elfinder.tinymce4') ?>',// use an absolute path!
      // file: '/elfinder/tinymce4',// use an absolute path!
      title: 'elFinder 2.0',
      width: 900,
      height: 450,
      resizable: 'yes'
    }, {
      setUrl: function (url) {
        win.document.getElementById(field_name).value = url;
      }
    });
    return false;
  }
</script>

