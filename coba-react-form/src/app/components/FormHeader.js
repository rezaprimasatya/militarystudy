import React, {Component} from 'react'
import {Grid, Image, Container, Button, Popup} from 'semantic-ui-react'
import KLogo from './assets/images/logo_kclub.png'
import './assets/css/header.css'

class FormHeader extends Component{
	constructor(props){
		super(props)
	}
	render(){
		return(
			<Container className="form-header">
				<Popup
					trigger={<a href="https://karmagroup.com" className="form-header__button-back">
					<span>&#10094;</span>
				</a>}
					content="back to karmagroup.com"					
				/>
				<div className="form-header__center-information">
					<img src={KLogo} className="form-header__center-information__img"/>
					<div className="right-content" className="form-header__center-information__information">
						Sign-up Form
					</div>
				</div>
			</Container>
		)
	}
}

export default FormHeader