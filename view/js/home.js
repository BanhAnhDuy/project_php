$(window).on('load' , function(event){
  $('body').removeClass('preloading');
  $('.load').delay(1000).fadeOut('fast');
 });


function go() {
  var x = document.getElementById("container");
  
  if (x.style.display === "none") {
    x.style.display = "block";
    
  } else {
    x.style.display = "none";
  }
 
}

function reload(){
  var container = document.getElementById("container");
  var content = container.innerHTML;
  container.innerHTML= content; 
  
 
  console.log("Refreshed"); 
}



function comeback(){
  var tg = setInterval(function(){
      document.documentElement.scrollTop-=20;
      if (document.documentElement.scrollTop <= 0)
      clearInterval(tg);
  }, 2);
}




const inputField = document.getElementById("input" );
inputField.addEventListener("keydown" , (e) => {
  if (e.code === "Enter") {
    let input = inputField.value;
    inputField.value = "";
    output(input);
  }
});

function output(input) {
  let product;
  let text = input.toLowerCase().replace(/[^\w\s\d]/gi, "");
  text = text
  .replace(/ a /g, " ")
  .replace(/whats/g, "what is")
  .replace(/please /g, "")
  .replace(/ please/g, "")
  .replace(/r u/g, "are you");

  if (compare(utterances, answers, text)) {
    // Search for exact match in triggers
    product = compare(utterances, answers, text);
  } 
  else {
    product = alternatives[Math.floor(Math.random() * alternatives.length)];
  }

  addChatEntry(input, product);
}

function compare(utterancesArray, answersArray, string) {
  let reply;
  let replyFound = false;
  for (let x = 0; x < utterancesArray.length; x++) {
    for (let y = 0; y < utterancesArray[x].length; y++) {
      if (utterancesArray[x][y] === string) {
        let replies = answersArray[x];
        reply = replies[Math.floor(Math.random() * replies.length)];
        replyFound = true;
        break;
      }
    }
    if (replyFound) {
      break;
    }
  }
  return reply;
}

function addChatEntry(input, product) {
  const messagesContainer = document.getElementById("messages");
  let userDiv = document.createElement("div");
  userDiv.id = "user";
  userDiv.className = "user response";
  userDiv.innerHTML = `<span>${input}</span> `;
  messagesContainer.appendChild(userDiv);

  let botDiv = document.createElement("div");
  let botText = document.createElement("span");
  botDiv.id = "bot";
  botDiv.className = "bot response";
  botText.innerHTML = "<img src=\'https://media.tenor.com/On7kvXhzml4AAAAj/loading-gif.gif\' width=\'30px\''>";
  botDiv.appendChild(botText);
  messagesContainer.appendChild(botDiv);

  messagesContainer.scrollTop =
    messagesContainer.scrollHeight - messagesContainer.clientHeight;

  setTimeout(() => {
    botText.innerText = `${product}`;
  }, 2000);
}

// input options
const utterances = [
 
  ["e", "xin chao", "chao" ],
  ["hu", "admin oi", "bot oi", "alo", "hello" , "hi"],
  ["toi muon thue xe", "toi can thue xe", "co thue xe khong"],
  ["co xe vinfast k"],
  ["co xe toyota k", "co xe hyundai k", "co xe ford k", "co xe Mitsubishi k?"],
  ["co xe 4 cho k", "co xe 16 cho k"],
  [
    "xe co bao nhieu muc gia","co bao nhieu muc gia"
    
  ],
  ["cam on ban" , "bye" , "tam biet"],
  
  ["giup toi", "can giup do", "giup toi voi"],
  
  ["haha"]
];

// Possible responses corresponding to triggers

const answers = [
   [
    "chào bạn...khỏe không?",
    "tuyệt, bạn ổn chứ?",
    "wow, chào mừng bạn"
  ],
  [
    "chào bạn , cần hổ trợ?", "admin có thể giúp gì?", "bạn cần gì ạ?", "xin chào , tôi có thể giúp gì?", "chúc bạn một ngày tốt lành , cần trợ giúp?" 
  ],
  [
    "Có ạ!",
    "Có cho thuê xe ạ",
    "Cần thuê xe nào?",
    "các xe đều có sẵn"
  ],
  ["Xe Vinfast đang có sẵn..."],
  ["Xe Toyota , Hyundai , Ford đang có sẵn..."],
  ["Các loại 4 chổ , 16 chổ đều có sẵn..."],
  ["Có đầy đủ các loại từ 500.000vnđ - 1tr vnđ"],
  ["Hẹn gặp lại bạn " , "Cảm ơn bạn đã sử dụng dịch vụ của chúng tôi!"],
  
  ["Bạn cần hổ trợ việc gì?", "Tôi có thể giúp gì cho bạn?..."],
  
  [" Haha! , cười gì vậy? :)"]
];

// Random for any other user input

const alternatives = [
  "Tôi không hiểu vấn đề của bạn!",
  "Xin lỗi , hiện tại tôi không thể trả lời câu hỏi này!",
];
