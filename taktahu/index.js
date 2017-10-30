var stackImage = [
	{
		title: "hesoyam",
		url: "https://karmagroup.com/wp-content/gallery/karma-le-preverger/Le-Preverger-Statue.jpg",
		caption: "asdasdasdqweqweqsdasdqewqweasdqwe",
		tags: [
			'tag1',
			'tag2'
		]
	},
	{
		title: "hesoyam",
		url: "https://karmagroup.com/wp-content/gallery/main-gallery/3._Kandara-Villas-.jpg",
		caption: "asdasdasdqweqweqsdasdqewqweasdqwe",
		tags: [
			'tag1',
			'tag2'
		]
	},
	{
		title: "hesoyam",
		url: "https://karmagroup.com/wp-content/gallery/karma-mayura/3._Karma_Mayura_Accommodation_Balcony.jpg",
		caption: "asdasdasdqweqweqsdasdqewqweasdqwe",
		tags: [
			'tag1',
			'tag2'
		]
	},
	{
		title: "hesoyam",
		url: "https://karmagroup.com/wp-content/gallery/karma-royal-phuket/3._Karma-Royal-Phuket-Accommodation.jpg",
		caption: "asdasdasdqweqweqsdasdqewqweasdqwe",
		tags: [
			'tag1',
			'tag2'
		]
	},
	{
		title: "hesoyam",
		url: "https://karmagroup.com/wp-content/gallery/karma-royal-phuket/6._Karma-Royal-Phuket-Lobby_Area.jpg",
		caption: "asdasdasdqweqweqsdasdqewqweasdqwe",
		tags: [
			'tag1',
			'tag2'
		]
	},
	{
		title: "hesoyam",
		url: "https://karmagroup.com/wp-content/gallery/karma-mayura/7._Karma_Mayura_Deluxe_Accommodation_Bathroom.jpg",
		caption: "asdasdasdqweqweqsdasdqewqweasdqwe",
		tags: [
			'tag1',
			'tag2'
		]
	},
	{
		title: "hesoyam",
		url: "https://karmagroup.com/wp-content/gallery/karma-royal-phuket/9._Karma-Royal-Phuket-Bathroom_Products.jpg",
		caption: "asdasdasdqweqweqsdasdqewqweasdqwe",
		tags: [
			'tag1',
			'tag2'
		]
	},
	{
		title: "hesoyam",
		url: "https://karmagroup.com/wp-content/gallery/karma-royal-phuket/8._Karma-Royal-Phuket-Accommodation_Kitchen_Area.jpg",
		caption: "asdasdasdqweqweqsdasdqewqweasdqwe",
		tags: [
			'tag1',
			'tag2'
		]
	}
]

$(document).ready(function(){	
	stackImage.map(function(img,index){
		let cardImgComponent = `
			<a class="col-md-3 img-card" href="#" data-toggle="modal" data-target="#exampleModal" data-pointer="${index}">
			    <div class="card-wrapper">
			        <img src="${img.url}">
			        <div class="img-title">
			            ${img.title}
			        </div>
			    </div>
			</a>		`
		$('#img-container').append(cardImgComponent)
	})
})

$(document).ready(function(){
	console.log(stackImage)
	$('.img-card').on('click', function(e){
		e.preventDefault()
		pointer = $(this).data('pointer')
		$('#viewport-img').attr('src',stackImage[pointer].url)
		$('#viewport-title').html(stackImage[pointer].title)
		$('#viewport-caption').html(stackImage[pointer].caption)
		console.log($(this).data('pointer'))
	})
})