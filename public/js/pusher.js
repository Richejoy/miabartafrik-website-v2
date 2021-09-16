 // Enable pusher logging - don't include this in production
Pusher.logToConsole = true;

var pusher = new Pusher('ea6540d3fdc6341ce907', {
  cluster: 'mt1'
});

var channel = pusher.subscribe('message');
channel.bind('MessageEvent', function(data) {
  alert(JSON.stringify(data));
});