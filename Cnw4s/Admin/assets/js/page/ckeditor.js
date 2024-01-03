'use strict';

$(function () {
  // CKEditor
  CKEDITOR.replace('ckeditor', {
    height: 300,
    // Thêm các cấu hình CKEditor khác tùy theo nhu cầu của bạn
  });

  // CodeMirror
  if (window.CodeMirror) {
    $(".codeeditor").each(function () {
      let editor = CodeMirror.fromTextArea(this, {
        lineNumbers: true,
        theme: "duotone-dark",
        mode: 'javascript',
        height: 200
        // Thêm các cấu hình CodeMirror khác tùy theo nhu cầu của bạn
      });
      editor.setSize("100%", 200);
    });
  }
});
