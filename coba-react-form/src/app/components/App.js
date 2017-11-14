import React, {Component} from 'react'
import InternalForm from './internal/InternalForm'
import FormHeader from './FormHeader'
import './assets/css/form.css'

class App extends Component{
	constructor(props){
		super(props)
	}
	render(){
		return(
			<div className="main-form">
				<FormHeader />
				<InternalForm />
			</div>			
		)
	}
}

export default App