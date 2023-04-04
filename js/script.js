        // declare ng audio gamit ID
        var audio = document.getElementById("myAudio");
            // play audio when clicking the button
    function playAudio() {
        audio.play();
    }

    // Change light mode pwedeng light pwedeng night
    function toggleMode() {
        document.body.classList.toggle("dark-mode");
    }

    
// design ng alert
var message = "This webpage is made by Yuri Alfrance Egipto of BSIT 1-1 and this webpage is also a responsive one. Enjoy!";

var alertBox = document.createElement("div");
//css para boogsh
alertBox.style.backgroundColor = "#555";
alertBox.style.color = "#fff";
alertBox.style.padding = "20px";
alertBox.style.borderRadius = "10px";
alertBox.style.position = "fixed";
alertBox.style.top = "50%";
alertBox.style.left = "50%";
alertBox.style.transform = "translate(-50%, -50%)";
alertBox.style.textAlign = "center";
alertBox.style.zIndex = "9999";

var messageText = document.createElement("p");
messageText.innerHTML = message;
messageText.style.marginBottom = "20px";

var okButton = document.createElement("button");
okButton.innerHTML = "OK";
okButton.style.backgroundColor = "#fff";
okButton.style.color = "#333";
okButton.style.padding = "10px";
okButton.style.borderRadius = "5px";
okButton.style.border = "none";
okButton.style.cursor = "pointer";
okButton.onclick = function() {
  alertBox.style.display = "none";
};

alertBox.appendChild(messageText);
alertBox.appendChild(okButton);
document.body.appendChild(alertBox);

