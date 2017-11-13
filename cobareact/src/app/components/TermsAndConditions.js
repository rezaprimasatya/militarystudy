import React, {Component} from 'react'
import '../assets/css/terms-and-conditions.css'

class TermsAndConditions extends Component{
	constructor(props){
		super(props)
		this.state = {
			title: this.props.title,
			terms: this.props.terms,
			conditions: this.props.conditions
		}
	}

	render(){
		return(
			<div className="terms-and-conditions">
				<p className="title">{this.state.title}:</p>
				<ul className="terms">
					{this.state.terms.map((term, index) => {
						return(
							<li key={index}>{term}</li>
						)
					})}
				</ul>
				<p className="conditions">{this.state.conditions}</p>
			</div>
		)
	}
}

export default TermsAndConditions