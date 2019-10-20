//Gets the browser specific XmlHttpRequest Object
function getXmlHttpRequestObject() {
    if (window.XMLHttpRequest) {
        return new XMLHttpRequest();
    } else if (window.ActiveXObject) {
        return new ActiveXObject("Microsoft.XMLHTTP");
    } else {
        alert("Your Browser Sucks!\nIt's about time to upgrade don't you think?");
    }
}

//Our XmlHttpRequest object to get the auto suggest
var searchReq = getXmlHttpRequestObject();

//Called from keyup on the search textbox.
//Starts the AJAX request.
function searchSuggest() {
    if (searchReq.readyState == 4 || searchReq.readyState == 0) {
        var str = escape(document.getElementById('txtSearch').value);
        searchReq.open("GET", 'searchSuggest.php?search=' + str, true);
        searchReq.onreadystatechange = handleSearchSuggest;
        searchReq.send(null);
    }
}

//Called when the AJAX response is returned.
function handleSearchSuggest() {
    if (searchReq.readyState == 4) {
        var ss = document.getElementById('search_suggest')
        ss.innerHTML = '';
        var str = searchReq.responseText.split("\n");
        for (i = 0; i < str.length - 1; i++) {
            //Build our element string.  This is cleaner using the DOM, but
            //IE doesn't support dynamically added attributes.
            var suggest = '<div onmouseover="javascript:suggestOver(this);" ';
            suggest += 'onmouseout="javascript:suggestOut(this);" ';
            suggest += 'onclick="javascript:setSearch(this.innerHTML);" ';
            suggest += 'class="suggest_link">' + str[i] + '</div>';
            ss.innerHTML += suggest;
        }
    }
}

//The first thing we do is check to make sure our response is ready. 
if (searchReq.readyState == 4) {
    //The next line gets a reference to our search_suggest DIV on the HTML page.  This is just a shortcut since we will be adding and removing items from this DIV.
    var ss = document.getElementById('search_suggest')
        //The next line gets the text from the response and splits it up into an array of strings.  We do this using the JavaScript split command.
    var str = searchReq.responseText.split("\n");

    //Mouse over function
    function suggestOver(div_value) {
        div_value.className = 'suggest_link_over';
    }
    //Mouse out function
    function suggestOut(div_value) {
        div_value.className = 'suggest_link';
    }

    //Finally, we will create a function that sets the text of the search textbox when one of our suggested items are clicked. 
    //Click function
    function setSearch(value) {
        document.getElementById('txtSearch').value = value;
        document.getElementById('search_suggest').innerHTML = '';
    }