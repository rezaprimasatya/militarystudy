import React, {Component} from 'react'
import '../assets/css/slideshow.css'

class Slideshow extends Component{
	constructor(props){
		super(props)
		this.state = {
			images: props.images,
			captionsTitle: props.titles,
			captions: props.captions,
			pointer: 0
		}
		this.changeImage = this.changeImage.bind(this)

	}

	changeImage(index){
		console.log(index)
	}
	render(){
		return(
			<div className="slideshow-container">
				{this.state.images.map((image, index) => {
					return(
						<div className="slide fade" key={index}>
							<img src={image} />
							<div className="caption-side">
								<div className="caption-title">
									{this.state.captionsTitle[index]}
								</div>
								<div className="caption">
									{this.state.captions[index]}
								</div>
							</div>
						</div>
					)
				})}
				<div className="dots-container">
				{this.state.images.map((image, index) => {
					return(
						<div key={index}>
							<span className="dot" onClick={this.changeImage(index)}></span>
						</div>
					)
				})}
				</div>
			</div>
		)
	}
}

export default Slideshow