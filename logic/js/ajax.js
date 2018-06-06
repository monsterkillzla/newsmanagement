window.onload = function() {
    document.querySelector('#form_add_post').addEventListener('submit', function(e) {
        e.preventDefault();
        var data = new FormData(this); // Create new FormData object.
        data = data.entries();
        var obj = data.next(); // Access Iterator.
        var retrieved = {};
        while(undefined !== obj.value) {
            retrieved[obj.value[0]] = obj.value[1];
            obj = data.next();
        } // Parse FormData into simple Object.

        //At this point might occur some custom validation based on retrieved Object.

        var XHR = new XMLHttpRequest();
        var urlEncodedData = "";
        var urlEncodedDataPairs = [];
        var container = document.getElementById("container");
        var secondContainer = document.createElement("div");

        for(var name in retrieved) {
            urlEncodedDataPairs.push(encodeURIComponent(name) + '=' + encodeURIComponent(retrieved[name]));
        }
        urlEncodedData = urlEncodedDataPairs.join('&').replace(/%20/g, '+'); // Parse object into urlEncoded String.

        XHR.addEventListener('load', function(event) {
            console.log('Data sent.');
            if (XHR.status === 200 && document.getElementsByClassName('row').length<20) {
                secondContainer.innerHTML = XHR.responseText;
                container.appendChild(secondContainer);
            }
        });
        XHR.addEventListener('error', function(event) {
            console.log('Oops! Something goes wrong.');
        });

        XHR.open('POST', '/logic/add_news_action.php');
        XHR.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        XHR.send(urlEncodedData); // Send the form.
    });

    document.querySelector('#form_add_comment').addEventListener('submit', function(e) {
        e.preventDefault();
        var data = new FormData(this); // Create new FormData object.
        data = data.entries();
        var obj = data.next(); // Access Iterator
        var retrieved = {};
        while(undefined !== obj.value) {
            retrieved[obj.value[0]] = obj.value[1];
            obj = data.next();
        } // Parse FormData into simple Object.

        //At this point might occur some custom validation based on retrieved Object.

        var XHR = new XMLHttpRequest();
        var urlEncodedData = "";
        var urlEncodedDataPairs = [];
        var container = document.getElementById('container');
        var secondContainer = document.createElement("div");

        for(var name in retrieved) {
            urlEncodedDataPairs.push(encodeURIComponent(name) + '=' + encodeURIComponent(retrieved[name]));
        }
        urlEncodedData = urlEncodedDataPairs.join('&').replace(/%20/g, '+'); // Parse object into urlEncoded String.

        XHR.addEventListener('load', function(event) {
            console.log('Data sent.');
            if (XHR.status === 200) {
                secondContainer.innerHTML = XHR.responseText;
                container.appendChild(secondContainer);
            }
        });
        XHR.addEventListener('error', function(event) {
            console.log('Oops! Something goes wrong.');
        });

        XHR.open('POST', '/logic/add_comment_action.php');
        XHR.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        XHR.send(urlEncodedData); // Send the form.
    });



};

