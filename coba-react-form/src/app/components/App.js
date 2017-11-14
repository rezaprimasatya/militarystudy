import React, {Component} from 'react'
import Form from './internal/form'
import FormHeader from './FormHeader'
import './assets/css/form.css'

class App extends Component{
	constructor(props){
		super(props)
	}
	render(){
		return(
			<div className="form">
				<FormHeader />
				<Form />
			</div>			
		)
	}
}

export default App