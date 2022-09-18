<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div id="reader" width="600px"></div>
</body>
<!-- <script type="text/javascript" src="https://unpkg.com/html5-qrcode"></script> -->
<script type="text/javascript" src="{{ url('js/scanner.js') }}"></script>
<script type="text/javascript">
function onScanSuccess(decodedText, decodedResult) {
  // handle the scanned code as you like, for example:
  alert(`Code matched = ${decodedText}`, decodedResult);
}

function onScanFailure(error) {
  // handle scan failure, usually better to ignore and keep scanning.
  // for example:
  alert(`Code scan error = ${error}`);
}

let html5QrcodeScanner = new Html5QrcodeScanner("reader", { fps: 10, qrbox: {width: 250, height: 250} }, false);
html5QrcodeScanner.render(onScanSuccess, onScanFailure);
</script>
</html>