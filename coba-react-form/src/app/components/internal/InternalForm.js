import React, {Component} from 'react'
import ReactDOM from 'react-dom'
import {Form, Container, Dropdown} from 'semantic-ui-react'
import Location from './LocationAPI'
import Country from './CountryAPI'
import '../assets/css/InternalForm.css'

class InternalForm extends Component{
	constructor(props){
		super(props)
		this.handleLocation = this.handleLocation.bind(this)
		this.handleCountry = this.handleCountry.bind(this)
	}

	handleLocation(event, data){		
		document.getElementById('location').value = data.value
		console.log(document.getElementById('location').value)		
	}
	handleCountry(event, data){
		document.getElementById('country').value = data.value
		console.log(document.getElementById('country').value)		
	}
	render(){
		return(
			<Container className='form-container'>
				<Form>					
				    <Form.Field>
				      <label>Location: </label>
				      <Dropdown 
				      	placeholder='Select Location' 
				      	fluid 
				      	search 
				      	selection 
				      	options={Location.all()}
						  onChange={this.handleLocation}
						  />	
					  <input type="text" id="location" hidden={true} />
				    </Form.Field>				    				    
				    <Form.Group widths='equal'>
			          <Form.Input label='First name' placeholder='First name' />
			          <Form.Input label='Last name' placeholder='Last name' />
			          <Form.Input label='Karma Staff Name' placeholder='Karma Staff Name' />
			        </Form.Group>		
			        <Form.TextArea name='address' label='Address' placeholder='Address...' />
			        <Form.Group widths='equal'>
			          <Form.Field>
				      <label>Country: </label>
				      <Dropdown 
				      	placeholder='Select a Country' 
				      	fluid 
				      	search 
				      	selection 
				      	options={Country.all()}
						  onChange={this.handleCountry}
						  />	
					  <input type="text" id="country" hidden={true} />
				    </Form.Field>
						<Form.Input name='state' label='State' placeholder='State' />
						<Form.Input name='city' label='City' placeholder='City' />
						<Form.Input name='postcode' label='Postcode' placeholder='Postcode' />
			        </Form.Group>	
					<Form.Group>
						<Form.Field width='4'>
							<label>Mobile Country Code: </label>
							<Dropdown 
							placeholder='mobile' 
							fluid 
							search 
							selection 
							options={Country.all()}
							onChange={this.handleCountry}
							/>	
							<input type="text" id="mobile" hidden={true} />
						</Form.Field>
						<Form.Field width="12">
							<Form.Input name='mobileNummber' label='Mobile Number' placeholder='Mobile Number' />					
						</Form.Field>
					</Form.Group>	
					<Form.Group>
						<Form.Field width='4'>
							<label>Phone Country Code: </label>
							<Dropdown 
							placeholder='mobile' 
							fluid 
							search 
							selection 
							options={Country.all()}
							onChange={this.handleCountry}
							/>	
							<input type="text" id="mobile" hidden={true} />
						</Form.Field>
						<Form.Field width="12">
							<Form.Input name='mobileNummber' label='Home Phone Number' placeholder='Home Phone Number' />					
						</Form.Field>
					</Form.Group>		    
				</Form>
			</Container>
		)
	}
}

export default InternalForm