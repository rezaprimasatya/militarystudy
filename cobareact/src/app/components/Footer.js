import React, {Component} from 'react'
import '../assets/css/footer.css'
import KarmaLogo from '../assets/images/logo_kclub.png'
import FontAwesome from 'react-fontawesome'

class Footer extends Component{
	constructor(props){
		super(props)
		this.state = {
			contact: this.props.contact,
			copyright: "2017 Karma Club All rights reserved"
		}
	}
	render(){
		return(
			<footer className="footer">
				<div className="container">
					<div className="left-side">
						<img src={KarmaLogo} />
						<div className="information">
							<p className="contact">{this.state.contact}</p>
							<p className="copyright">@{this.state.copyright}</p>
						</div>
					</div>
					<div className="right-side">
						<a className="social-icon">
							<FontAwesome name="facebook" />
						</a>
						<a className="social-icon">
							<FontAwesome name="twitter" />
						</a>
						<a className="social-icon">
							<FontAwesome name="instagram" />
						</a>
						<a className="social-icon">
							<FontAwesome name="soundcloud" />
						</a>
					</div>
				</div>
			</footer>
		)
	}
}

export default Footer