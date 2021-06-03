//methodをpostへ
function sendPost(event) {
    event.preventDefault();
    var form = document.createElement('form');
    form.action = event.target.href;
    form.method = 'post';
    document.body.appendChild(form);
    form.submit();
  }

//ログアウト確認アラート
function logoutChk() {
    var flag = confirm("本当にログアウトしますか？")
    return flag;
}
function submissionChk() {
  var flag = confirm("本当に投稿しますか？")
  return flag;
}