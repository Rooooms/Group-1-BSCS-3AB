function firstBotMessage() {
  let firstMessage = "Is this available?"
 document.getElementById ("botMsg").innerHTML = '<p class="bot-text"><span>' + firstMessage + '</span></p>';
}
firstBotMessage();

function getResponse() {
   let userText = $("#textInput").val();

   if (userText == ""){
       userText = "Thank you have a good day ";
   }

let userHtml = '<p class="userText"><span>' + userText + '</span></p>'; 
$("#textInput").val("");
$("#chatbox").append(userHtml);
setTimeout( () => {
    getHardResponse (userText);
}, 1000)
}

function buttonSendText(sampleText) {
  let userHtml = '<p class="userText"><span>' + sampleText + '</span></p>';
  $("#textInput").val("");
   $("#chatbox").append(userHtml);
}
function sendButton(){
  getResponse();

};