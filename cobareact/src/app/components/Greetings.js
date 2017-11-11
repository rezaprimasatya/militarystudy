import React, {Component} from 'react'
import '../assets/css/greetings.css'

class Greetings extends Component{
	constructor(props){
		super(props)
		this.state = {
			title: this.props.title,
			promoName: this.props.promoName,
			subTitle: this.props.subTitle,
			texts: this.props.texts
		}
	}

	render(){
		return(
			<div className="greetings">
				<h1 className="greeting-title">{this.state.title}</h1>
				<h2 className="promo-name">{this.state.promoName}</h2>
				<div className="subtitle">
					{this.state.subTitle.map((sub, index) => {
						return(
							<p className="greeting-subtitle" key={index}>{sub}</p>
						)
					})}	
				</div>			
				{this.state.texts.map((text, index) => {
					return(
						<p className="greeting-text" key={index}>{text}</p>
					)
				})}
				<div className="border"></div>
			</div>
		)
	}
}
export default Greetings