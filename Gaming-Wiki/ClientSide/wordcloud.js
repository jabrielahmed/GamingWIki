/**
 * As soon as the home page is loaded It will grab the articles from the db and display them with
 * clickable links to view their pages
 */
function getGames() {
    var url = "./getWordCloudValues.php";
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.open("GET", url, false);
    xmlHttp.onreadystatechange = function () {
        if (xmlHttp.readyState === XMLHttpRequest.DONE && xmlHttp.status === 200) {
            var response = JSON.parse(xmlHttp.responseText);
            var words = [];
            response.forEach(element => buildURL(element, words));
            $('#wordcloud').jQCloud(words, {
                width: 1200,
                center: {x: 0.5, y:0.2},
                height: 600,
                delay: 10,
            });
        }
    };
    xmlHttp.send(null);
    return xmlHttp.responseText;
}

/**
 * Builds the get request for each individual link.
 * @param {*} element specific article 
 * @param {*} words  array that will be used to make word cloud
 */
function buildURL(element, words) {
    var url = window.location.href;
    url = url.replace(/home.php/g, "display.php")
    url = url + "?article=" + element.Id;
    // if (element.Upvoters.length > 100) {
    //     element.Upvoters.length = 100;
    // }
    words.push({ text: element.Game, weight: Math.log2(element.Upvoters.length)*2000, link: url })
}
getGames();