function getGames() {
    var url = "./getWordCloudValues.php";
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.open( "GET", url, false ); 
    xmlHttp.onreadystatechange = function () {
        if(xmlHttp.readyState === XMLHttpRequest.DONE && xmlHttp.status === 200) {
            console.log(xmlHttp.responseText);
            var response = JSON.parse(xmlHttp.responseText);
            var words = [];
            response.forEach(element => {
                words.push({text: element.GameName, weight: Math.random()*50, link: "http://www.google.com"})
            });
        $('#wordcloud').jQCloud(words, {
            width: 1000,
            height: 800
        });
        }
      };
    xmlHttp.send( null );
    return xmlHttp.responseText;
}
getGames();