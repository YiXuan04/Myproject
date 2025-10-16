function loadContent(filename) {
  fetch(filename)
      .then(response => response.text())
      .then(html => {
          document.getElementById('contentArea').innerHTML = html;
      })
      .catch(err => {
          document.getElementById('contentArea').innerHTML = '載入失敗：' + err;
      });
}