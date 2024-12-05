<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cricket Club Admin Panel</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<header>
        <h1>Cricket Club Admin Panel</h1>
    </header>
    <div class="request-list">
        <h2>Requests to Manage</h2>
        <ul id="request-list">
            <!-- Requests will be dynamically added here -->
        </ul>
    </div>
    <script>
	// script.js (for demonstration purposes)
const requestList = document.getElementById('request-list');

// Simulated request data (replace with actual data retrieval)
let requests = [
    { id: 1, name: 'John Doe', request: 'Booking request for 2 hours', status: 'Pending' },
    { id: 2, name: 'Alice Smith', request: 'Equipment request for a match', status: 'Pending' },
    { id: 3, name: 'Bob Johnson', request: 'Practice session request', status: 'Pending' },
];

// Function to render requests in the admin panel
function renderRequests() {
    requestList.innerHTML = '';

    for (const request of requests) {
        const listItem = document.createElement('li');
        listItem.innerHTML = `
            <div>
                <strong>Name:</strong> ${request.name}<br>
                <strong>Request:</strong> ${request.request}<br>
                <strong>Status:</strong> ${request.status}<br>
            </div>
            <div>
                <button onclick="approveRequest(${request.id})">Approve</button>
                <button onclick="disapproveRequest(${request.id})">Disapprove</button>
            </div>
        `;

        requestList.appendChild(listItem);
    }
}

// Function to simulate approving a request (replace with backend logic)
function approveRequest(requestId) {
    const request = requests.find(req => req.id === requestId);
    if (request) {
        request.status = 'Approved';
        renderRequests();
    }
}

// Function to simulate disapproving a request (replace with backend logic)
function disapproveRequest(requestId) {
    const request = requests.find(req => req.id === requestId);
    if (request) {
        request.status = 'Disapproved';
        renderRequests();
    }
}

// Initial rendering of requests
renderRequests();

	
	</script>
</body>
</html>
//pending........................................................................
