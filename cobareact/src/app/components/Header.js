import React, {Component} from 'react'
import '../assets/css/header.css'
import KarmaLogo from '../assets/images/karma-club-logo.jpg'

class Header extends Component{
  render(){
    return(
      <div className="header">
      	<img src={KarmaLogo}/>
      </div>
    )
  }
}

export default Header