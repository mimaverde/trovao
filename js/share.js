let name;

const twitterShareButton = document.getElementById("shareTwitter");
const facebookShareButton = document.getElementById("shareFacebook");
const copyButton = document.getElementById("");
const shareText = "Estou ouvindo este podcast da Trovão";
const url = window.location.href;
const tweet = `https://twitter.com/intent/tweet?text=${shareText}%20${url}`;
const post = `https://www.facebook.com/sharer/sharer.php?u=${url}&quote=${shareText}`;

const popUpSocial = (url, name) => {
  const newWindow = window.open(url, name, "toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600");
  
  if (window.focus) {
    newWindow.focus()
  }

  return false
}

const fallbackCopyTextToClipboard = (text) => {
  const textArea = document.createElement("textarea");
  textArea.value = text;
  
  textArea.style.top = "0";
  textArea.style.left = "0";
  textArea.style.position = "fixed";

  document.body.appendChild(textArea);
  textArea.focus();
  textArea.select();

  try {
    const successful = document.execCommand('copy');
    const msg = successful ? 'successful' : 'unsuccessful';
    console.log('Fallback: Copying text command was ' + msg);
  } catch (err) {
    console.error('Fallback: Oops, unable to copy', err);
  }

  document.body.removeChild(textArea);
}

function copyTextToClipboard(text) {
  if (!navigator.clipboard) {
    fallbackCopyTextToClipboard(text);
    return;
  }
  navigator.clipboard.writeText(text).then(function() {
    console.log('Async: Copying to clipboard was successful!');
  }, function(err) {
    console.error('Async: Could not copy text: ', err);
  });
}

var copyBobBtn = document.querySelector('.js-copy-bob-btn'),
  copyJaneBtn = document.querySelector('.js-copy-jane-btn');

copyToShare.addEventListener('click', (e) => {
  e.preventDefault();
  copyTextToClipboard(url);
});

twitterShareButton.addEventListener("click", () => {
  name = "Compartilhar no Twitter";
  popUpSocial(tweet, name);
});

facebookShareButton.addEventListener("click", () => {
  name = "Compartilhar no Facebook";
  popUpSocial(post, name);
});