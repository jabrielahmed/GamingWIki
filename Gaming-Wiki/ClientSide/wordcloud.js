var words = [
    { text: "SOME GAME NAME", weight: 13, link: 'http://www.google.com' },
    { text: "SOME GAME NAME", weight: 50.4, link: 'http://www.google.com' },
    { text: "SOME GAME NAME", weight: 10.5, link: 'http://www.google.com' },
    { text: "SOME GAME NAME", weight: 9.4, link: 'http://www.google.com' },
    { text: "SOME GAME NAME", weight: 50.4, link: 'http://www.google.com' },
    { text: "SOME GAME NAME", weight: 9.4, link: 'http://www.google.com' },
    { text: "SOME GAME NAME", weight: 9.4, link: 'http://www.google.com' },
    { text: "SOME GAME NAME", weight: 9.4, link: 'http://www.google.com' },
    { text: "SOME GAME NAME", weight: 20.4, link: 'http://www.google.com' },
    { text: "SOME GAME NAME", weight: 20.4, link: 'http://www.google.com' },
    { text: "SOME GAME NAME", weight: 20.4, link: 'http://www.google.com' },
    { text: "SOME GAME NAME", weight: 9.4, link: 'http://www.google.com' },
    { text: "SOME GAME NAME", weight: 20.4, link: 'http://www.google.com' },
    { text: "SOME GAME NAME", weight: 50.4, link: 'http://www.google.com' },
    { text: "SOME GAME NAME", weight: 40.4, link: 'http://www.google.com' },
    { text: "SOME GAME NAME", weight: 30.4, link: 'http://www.google.com' },
];
$('#wordcloud').jQCloud(words, {
    width: 1000,
    height: 800
});