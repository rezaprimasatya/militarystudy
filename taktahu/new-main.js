var stackImage = [
	{
		title: "Le Preverger Statue",
		url: "https://karmagroup.com/wp-content/gallery/karma-le-preverger/Le-Preverger-Statue.jpg",
		caption: "asdasdasdqweqweqsdasdqewqweasdqwe",
		tags: [
			'tag1',
			'tag2'
		]
	},
	{
		title: "Kandara Villas",
		url: "https://karmagroup.com/wp-content/gallery/main-gallery/3._Kandara-Villas-.jpg",
		caption: "asdasdasdqweqweqsdasdqewqweasdqwe",
		tags: [
			'tag1',
			'tag2'
		]
	},
	{
		title: "Royal Palms Spa",
		url: "https://karmagroup.com/wp-content/gallery/karma-royal-palms/Royal_Palms_Spa2.jpg",
		caption: "asdasdasdqweqweqsdasdqewqweasdqwe",
		tags: [
			'tag1',
			'tag2'
		]
	},
	{
		title: "Karma Royal Phuket Accommodation",
		url: "https://karmagroup.com/wp-content/gallery/karma-royal-phuket/3._Karma-Royal-Phuket-Accommodation.jpg",
		caption: "asdasdasdqweqweqsdasdqewqweasdqwe",
		tags: [
			'tag1',
			'tag2'
		]
	},
	{
		title: "Karma Royal Phuket Lobby Area",
		url: "https://karmagroup.com/wp-content/gallery/karma-royal-phuket/6._Karma-Royal-Phuket-Lobby_Area.jpg",
		caption: "asdasdasdqweqweqsdasdqewqweasdqwe",
		tags: [
			'tag1',
			'tag2'
		]
	},
	{
		title: "Karma Mayura Deluxe Accommodation Bathroom",
		url: "https://karmagroup.com/wp-content/gallery/karma-mayura/7._Karma_Mayura_Deluxe_Accommodation_Bathroom.jpg",
		caption: "asdasdasdqweqweqsdasdqewqweasdqwe",
		tags: [
			'tag1',
			'tag2'
		]
	},
	{
		title: "Karma Royal Phuket Bathroom Products",
		url: "https://karmagroup.com/wp-content/gallery/karma-royal-phuket/9._Karma-Royal-Phuket-Bathroom_Products.jpg",
		caption: "asdasdasdqweqweqsdasdqewqweasdqwe",
		tags: [
			'tag1',
			'tag2'
		]
	},
	{
		title: "Karma Royal Phuket Accommodation Kitchen Area",
		url: "https://karmagroup.com/wp-content/gallery/karma-royal-phuket/8._Karma-Royal-Phuket-Accommodation_Kitchen_Area.jpg",
		caption: "asdasdasdqweqweqsdasdqewqweasdqwe",
		tags: [
			'tag1',
			'tag2'
		]
	}
]

let doSearch = function(element){	
	console.log(element.value)
	let searchKey = element.value.toLowerCase()
	var regexp = new RegExp(searchKey, "i");	
	let searchResult = []
	stackImage.map(function(image, index){		
		if (image.title.toLowerCase().search(regexp) != -1) {
			searchResult.push(image)
		}
	})
	if (searchKey == "" && searchResult == []) {
		searchResult = stackImage
	}
	renderImage(searchResult, function(card){
		let galleryViewport = document.getElementById("gallery-viewport")	
		galleryViewport.innerHTML = card
	})
}

let renderImage = function(arrayImage, callback){	
	let card = ``
	arrayImage.map(function(image, index){
		var cardTemplate = `
		<a class="col-4 img-card" href="#" data-img="${image.url}" data-toggle="modal" data-target="#exampleModal" data-pointer="${index}">
            <div class="card-wrapper">
                <img src="${image.url}">
                <div class="img-title">
                    ${image.title.substring(0,25)}...
                </div>
            </div>
        </a>
        `
        card += cardTemplate        
	})
	callback(card)
}

renderImage(stackImage, function(card){
	// console.log(card)
	let galleryViewport = document.getElementById("gallery-viewport")	
	galleryViewport.innerHTML = card
})