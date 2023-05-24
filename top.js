var items = [
  { name: "Bleach", rating: 7.91, imageUrl: "poze/Bleach-icon.webp", info: "Ichigo Kurosaki is an ordinary high schooler—until his family is attacked by a Hollow, a corrupt spirit that seeks to devour human souls. It is then that he meets a Soul Reaper named Rukia Kuchiki, who gets injured while protecting Ichigo's family from the assailant. To save his family, Ichigo accepts Rukia's offer of taking her powers and becomes a Soul Reaper as a result.However, as Rukia is unable to regain her powers, Ichigo is given the daunting task of hunting down the Hollows that plague their town. However, he is not alone in his fight, as he is later joined by his friends—classmates Orihime Inoue, Yasutora Sado, and Uryuu Ishida—who each have their own unique abilities. As Ichigo and his comrades get used to their new duties and support each other on and off the battlefield, the young Soul Reaper soon learns that the Hollows are not the only real threat to the human world.", href: "Bleach.html" },
  { name: "Code Geass: Lelouch of the Rebellion", rating: 8.70, imageUrl: "poze/Code Geass.webp", info: "In the year 2010, the Holy Empire of Britannia is establishing itself as a dominant military nation, starting with the conquest of Japan. Renamed to Area 11 after its swift defeat, Japan has seen significant resistance against these tyrants in an attempt to regain independence.Lelouch Lamperouge, a Britannian student, unfortunately finds himself caught in a crossfire between the Britannian and the Area 11 rebel armed forces. He is able to escape, however, thanks to the timely appearance of a mysterious girl named C.C., who bestows upon him Geass, the 'Power of Kings.' Realizing the vast potential of his newfound 'power of absolute obedience,' Lelouch embarks upon a perilous journey as the masked vigilante known as Zero, leading a merciless onslaught against Britannia in order to get revenge once and for all.", href: "index.html" },
  { name: "Yu Yu Hakusho: Ghost Files", rating: 8.46, imageUrl: "poze/Yuu☆Yuu☆Hakusho.webp", info: "One fateful day, Yuusuke Urameshi, a 14-year-old delinquent with a dim future, gets a miraculous chance to turn it all around when he throws himself in front of a moving car to save a young boy. His ultimate sacrifice is so out of character that the authorities of the spirit realm are not yet prepared to let him pass on. Koenma, heir to the throne of the spirit realm, offers Yuusuke an opportunity to regain his life through completion of a series of tasks. With the guidance of the death god Botan, he is to thwart evil presences on Earth as a Spirit Detective.To help him on his venture, Yuusuke enlists ex-rival Kazuma Kuwabara, and two demons, Hiei and Kurama, who have criminal pasts. Together, they train and battle against enemies who would threaten humanity's very existence.", href: "index.html" },
  { name: "Classroom of the Elite", rating: 7.86, imageUrl: "poze/Classroom of the Elite.webp", info: "On the surface, Koudo Ikusei Senior High School is a utopia. The students enjoy an unparalleled amount of freedom, and it is ranked highly in Japan. However, the reality is less than ideal. Four classes, A through D, are ranked in order of merit, and only the top classes receive favorable treatment.Kiyotaka Ayanokouji is a student of Class D, where the school dumps its worst. There he meets the unsociable Suzune Horikita, who believes she was placed in Class D by mistake and desires to climb all the way to Class A, and the seemingly amicable class idol Kikyou Kushida, whose aim is to make as many friends as possible.While class membership is permanent, class rankings are not; students in lower ranked classes can rise in rankings if they score better than those in the top ones. Additionally, in Class D, there are no bars on what methods can be used to get ahead. In this cutthroat school, can they prevail against the odds and reach the top?", href: "index.html" },
  { name: "Chainsaw Man", rating: 8.6, imageUrl: "poze/Chainwsaw Man.jpg", info: "Denji is robbed of a normal teenage life, left with nothing but his deadbeat father's overwhelming debt. His only companion is his pet, the chainsaw devil Pochita, with whom he slays devils for money that inevitably ends up in the yakuza's pockets. All Denji can do is dream of a good, simple life: one with delicious food and a beautiful girlfriend by his side. But an act of greedy betrayal by the yakuza leads to Denji's brutal, untimely death, crushing all hope of him ever achieving happiness.Remarkably, an old contract allows Pochita to merge with the deceased Denji and bestow devil powers on him, changing him into a hybrid able to transform his body parts into chainsaws. Because Denji's new abilities pose a significant risk to society, the Public Safety Bureau's elite devil hunter Makima takes him in, letting him live as long as he obeys her command. Guided by the promise of a content life alongside an attractive woman, Denji devotes everything and fights with all his might to make his naive dreams a reality", href: "index.html" }
];

// Sort the items based on their ratings in descending order
items.sort(function(a, b) {
  return b.rating - a.rating;
});

// Generate HTML output with sorted items
var htmlOutput = '';
for (var i = 0; i < items.length; i++) {
  htmlOutput += '<tr>';
  htmlOutput += '<td class="rank">' + (i + 1) + '</td>';
  htmlOutput += '<td class="image-container"><img src="' + items[i].imageUrl + '" alt="Item Image"></td>';
  htmlOutput += '<td class="name">' + items[i].name + '</td>';
  htmlOutput += '<td class="rating">' + items[i].rating + '</td>';
  htmlOutput += '<td class="info">' + items[i].info + '</td>';
  htmlOutput += '<td class="button-container"><button onclick="window.location.href=\'' + items[i].href + '\'">Grade</button></td>';
  htmlOutput += '</tr>';
}

// Update the items container with the generated HTML
document.getElementById("itemsContainer").innerHTML = htmlOutput;