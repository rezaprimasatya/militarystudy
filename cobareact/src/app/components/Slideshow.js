import React, {Component} from 'react'
import '../assets/css/slideshow.css'

class Slideshow extends Component{
	constructor(props){
		super(props)
		this.state = {
			activeIndex: 0,
			images: props.images,
			captionsTitle: props.titles,
			captions: props.captions,
			pointer: 0
		}
		this.changeImage = this.changeImage.bind(this)
		this.autoUpdateImage  =this.autoUpdateImage.bind(this)
	}

	componentDidMount() {
	  this.autoUpdateImage();
	}

	changeImage(index){
		this.setState({activeIndex: index})
		console.log(index)
	}
	autoUpdateImage(){		
		setTimeout(function() {
			let currentIndex = this.state.activeIndex 
			if (currentIndex == this.state.images.length) {
				currentIndex = 0
			}
			else
				currentIndex++
			console.log(currentIndex)
			this.setState({activeIndex: currentIndex})
		}.bind(this), 3000);
	}
	render(){
		return(
			<div className="slideshow-container">
				{this.state.images.map((image, index) => {
					return(
						<div className={this.state.activeIndex == index?'slide fade active':'slide fade'} key={index}>
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
							<span className="dot" onClick={e => this.changeImage(index)}></span>
						</div>
					)
				})}
				</div>
			</div>
		)
	}
}

export default Slideshow