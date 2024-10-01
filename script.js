// JavaScript Code for ShopDB homepage

// Select the call-to-action button and add an event listener for when it is clicked
var button = document.querySelector('.button');
button.addEventListener('click', function() {
  alert('You clicked the Shop Now button!');
});


// location
function showPosition(position) {
    var lat = position.coords.latitude;
    var lng = position.coords.longitude;
  
    // Create a new map centered on the user's location
    var map = new google.maps.Map(document.getElementById('map'), {
      center: {lat: lat, lng: lng},
      zoom: 8
    });
  
    // Add a marker to the map at the user's location
    var marker = new google.maps.Marker({
      position: {lat: lat, lng: lng},
      map: map,
      title: 'Your location'
    });
  }
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else {
    alert("Geolocation is not supported by this browser.");
  }

  







window.onload = function(){
// Get the first canvas element and its 2D context
  var canvas1 = document.getElementById("Canvas1");
  var ctx1 = canvas1.getContext("2d");

  // Get the second canvas element and its 2D context
  var canvas2 = document.getElementById("Canvas2");
  var ctx2 = canvas2.getContext("2d");

  // Get the third canvas element and its 2D context
  var canvas3 = document.getElementById("Canvas3");
  var ctx3 = canvas3.getContext("2d");

   // Get the fourth canvas element and its 2D context
   var canvas4 = document.getElementById("Canvas4");
  var ctx4 = canvas4.getContext("2d");

   // Get the fifth canvas element and its 2D context
   var canvas5 = document.getElementById("Canvas5");
  var ctx5 = canvas5.getContext("2d");
    
   // Get the fifth canvas element and its 2D context
   var canvas6 = document.getElementById("Canvas6");
  var ctx6 = canvas6.getContext("2d");


  // Create two new Image objects
  var img1 = new Image();
  var img2 = new Image();
  var img3 = new Image();
  var img4 = new Image();
  var img5 = new Image();
  var img6 = new Image();

  // Set the sources of the images
  img1.src = "mall.jpg";
  img2.src = "fashion.jpeg";
  img3.src = "view.jpeg";
  img4.src = "smarket.jpeg";
  img5.src = "image.jpeg";
  img6.src = "shop.jpeg";
  // Draw the first image on the first canvas
  img1.onload = function() {
      ctx1.drawImage(img1, 0, 0);
  };

  // Draw the second image on the second canvas
  img2.onload = function() {
      ctx2.drawImage(img2, 0, 0);
  };
   // Draw the first image on the first canvas
   img3.onload = function() {
      ctx3.drawImage(img3, 0, 0);
  };
  // Draw the first image on the first canvas
  img4.onload = function() {
      ctx4.drawImage(img4, 7, 0);
  };
   // Draw the first image on the first canvas
   img5.onload = function() {
      ctx5.drawImage(img5, 0, 0);
  };
   // Draw the first image on the first canvas
   img6.onload = function() {
      ctx6.drawImage(img6, 0, 0);
  };
}

function showPosition(position) {
    var lat = position.coords.latitude;
    var lng = position.coords.longitude;
  
    // Create a new map centered on the user's location
    var map = new google.maps.Map(document.getElementById('map'), {
      center: {lat: lat, lng: lng},
      zoom: 8
    });
  
    // Add a marker to the map at the user's location
    var marker = new google.maps.Marker({
      position: {lat: lat, lng: lng},
      map: map,
      title: 'Your location'
    });
  }
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else {
    alert("Geolocation is not supported by this browser.");
  }
  // Function thats detecting type of devive being used
  function detectDevice() {
    const userAgent = navigator.userAgent;
  
    if (userAgent.match(/Android/i)) {
      const androidVersion = parseFloat(userAgent.slice(userAgent.indexOf("Android")+8));
      let androidDevice = '';
      if (userAgent.match(/Mobile/i)) {
        androidDevice = 'Mobile Device';
      } else if (userAgent.match(/Tablet/i)) {
        androidDevice = 'Tablet';
      }
      let androidModel = '';
      const modelRegex = /\b\w+\sBuild/i;
      const matches = userAgent.match(modelRegex);
      if (matches) {
        androidModel = matches[0].replace(' Build', '');
      }
      console.log('Android ' + androidVersion + ' ' + androidDevice + ' detected, Model: ' + androidModel);
    } else if (userAgent.match(/iPhone|iPad|iPod/i)) {
      let iosModel = '';
      const modelRegex = /\biPhone.*?\b|\biPod.*?\b|\biPad.*?\b/i;
      const matches = userAgent.match(modelRegex);
      if (matches) {
        iosModel = matches[0];
      }
      console.log('iOS device detected, Model: ' + iosModel);
    } else if (userAgent.match(/Windows Phone|iemobile/i)) {
      let windowsPhoneModel = '';
      const modelRegex = /\b;(\w+);/i;
      const matches = userAgent.match(modelRegex);
      if (matches) {
        windowsPhoneModel = matches[1];
      }
      console.log('Windows Phone device detected, Model: ' + windowsPhoneModel);
    } else {
      console.log('Other device detected');
    }
  }
  
  export { detectDevice };
  