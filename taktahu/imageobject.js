class ImageObject{
	constructor(title, url, caption, tags){
		this.title = title
		this.url = url
		this.caption = caption
		this.tags = tags
	}
	getTitle(){
		return this.title
	}
	getUrl(){
		return this.url
	}
	getCaption(){
		return this.caption
	}
	getTags(){
		return this.tags
	}
	render(index){
		return `
			<a class="col-4 img-card" href="#" data-img="${this.url}" data-toggle="modal" data-target="#exampleModal" data-pointer="${index}">
	            <div class="card-wrapper">
	                <img src="${this.url}">
	                <div class="img-title">
	                    ${this.title.substring(0,25)}...
	                </div>
	            </div>
	        </a>
		`
	}
}