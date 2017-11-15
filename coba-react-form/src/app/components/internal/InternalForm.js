import React, {Component} from 'react'
import ReactDOM from 'react-dom'
import {Form, Container, Dropdown, Button, Checkbox, Input, Radio, Select, TextArea} from 'semantic-ui-react'
import Location from './LocationAPI'
import Country from './CountryAPI'
import CountryCode from './CountryCodeAPI'
import '../assets/css/InternalForm.css'

const optionsKarmaGroup = [
  { key: 'y', text: 'Yes', value: 'true' },
  { key: 'n', text: 'No', value: 'false' },
]

class InternalForm extends Component{
	constructor(props){
		super(props)
		this.state={
			key: 257,
			uid: 0,
			sid: 0,
			hosted: 0,
			location:'',
			firstname:'',
			lastname:'',
			karmaStaffName:'',
			address:'',
			country:'AUSTRALIA',
			state:'',
			city:'',
			postcode:'',
			mobileCountryCode:'+61',
			mobileNumber:'',
			homePhoneCountryCode:'+61',
			homePhoneNumber:'',
			email:'',
			birthday:'',
			dayOfBirth:'',
			monthOfBirth:'',
			yearOfBirth:'',
			promoCode:'',
			membership: false,
			odysseyMembershipNumber:''
		}
		this.updateLocation = this.updateLocation.bind(this)
		this.updateCountry = this.updateCountry.bind(this)
		this.updateFirstname = this.updateFirstname.bind(this)
		this.updateLastname = this.updateLastname.bind(this)
		this.updateBirthDay = this.updateBirthDay.bind(this)
		this.handlePromoCode = this.handlePromoCode.bind(this)
	}

	updateLocation(event, data){		
		this.setState({location: data.value},
			() => {
				console.log('location: '+this.state.location)
			}
		)	
	}

	updateFirstname(event){		
		this.setState({firstname: event.target.value},
			() => {
				console.log('firstname: '+this.state.firstname)
			}
		)
	}

	updateLastname(event){
		this.setState({lastname: event.target.value},
			() => {
				console.log('lastname: '+this.state.lastname)
			}
		)
	}

	updateKarmaStaffName(event){
		this.setState({karmaStaffName: event.target.value},
			() => {
				console.log('karmaStaffName: '+this.state.karmaStaffName)
			}
		)
	}

	updateAddress(event){
		this.setState({address: event.target.value},
			() => {
				console.log('address: '+this.state.address)
			}
		)
	}

	updateCountry(event, data){
		this.setState({country: data.value},
			() => {
				console.log('country: '+this.state.country)
			}
		)		
	}

	updateState(event){
		this.setState({state: event.target.value},
			() => {
				console.log('state: '+this.state.state)
			}
		)		
	}

	updateCity(event){
		this.setState({city: event.target.value},
			() => {
				console.log('city: '+this.state.city)
			}
		)		
	}

	updatePostCode(event){
		this.setState({postcode: event.target.value},
			() => {
				console.log('postcode: '+this.state.postcode)
			}
		)		
	}

	updateMobileCountryCode(event,data){
		this.setState({mobileCountryCode: data.value},
			() => {
				console.log('mobileCountryCode: '+this.state.mobileCountryCode)
			}
		)		
	}

	updateMobileNumber(event){
		this.setState({mobileNumber: this.state.mobileCountryCode + event.target.value},
			() => {
				console.log('mobileNumber: '+this.state.mobileNumber)
			}
		)		
	}

	updateHomePhoneCountryCode(event, data){
		this.setState({homePhoneCountryCode: data.value},
			() => {
				console.log('homePhoneCountryCode: '+this.state.homePhoneCountryCode)
			}
		)
	}

	updateHomePhoneNumber(event){
		this.setState({homePhoneNumber: this.state.homePhoneCountryCode+event.target.value},
			() => {
				console.log('homePhoneNumber: '+this.state.homePhoneNumber)
			}
		)
	}

	updateEmail(event){
		this.setState({email: event.target.value},
			() => {
				console.log('email: '+ this.state.email)
			}
		)
	}

	updateBirthDay(event){
		let birthday = event.target.value.split('-')
		let day = birthday[2]
		let month = birthday[1]
		let year = birthday[0]
		this.setState({
			birthday: birthday,
			dayOfBirth: day,
			monthOfBirth: month,
			yearOfBirth: year
		}, 
			() => {
				console.log(this.state.birthday)
			}
		)
	}

	handlePromoCode(event){
		let promoCode = event.target.value.toUpperCase()

		console.log(promoCode)
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
						  onChange={this.updateLocation}
						  />	
					  {/*<input type="text" id="location" hidden={true} />*/}
				    </Form.Field>		

				    <Form.Group widths='equal'>
			          <Form.Input label='First name' placeholder='First name' onKeyUp={this.updateFirstname}/>
			          <Form.Input label='Last name' placeholder='Last name' onKeyUp={this.updateLastname}/>
			          <Form.Input label='Karma Staff Name' placeholder='Karma Staff Name' onKeyUp={this.updateKarmaStaffName} />
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
								defaultValue={'AUSTRALIA'}
								onChange={this.updateCountry}
							/>	
							{/*<input type="text" id="country" hidden={true} />*/}
						</Form.Field>
						<Form.Input name='state' label='State' placeholder='State' />
						<Form.Input name='city' label='City' placeholder='City' />
						<Form.Input name='postcode' label='Postcode' placeholder='Postcode' />
			        </Form.Group>	

					<Form.Group>
						<Form.Field width='4'>
							<label>Mobile Country Code: </label>
							<Dropdown 
							placeholder='Mobile Country Code' 
							fluid 
							search 
							selection 
							defaultValue={'+61'}
							options={CountryCode.all()}
							onChange={this.updateMobileCountryCode}
							/>	
							{/*<input type="text" id="mobileCountryCode" hidden={true} />*/}
						</Form.Field>
						<Form.Field width="12">
							<Form.Input name='mobileNummber' label='Mobile Number' placeholder='Mobile Number' />					
						</Form.Field>
					</Form.Group>

					<Form.Group>
						<Form.Field width='4'>
							<label>Home Phone Country Code: </label>
							<Dropdown 
							placeholder='Home Phone Country Code' 
							fluid 
							search 
							selection 
							defaultValue={'+61'}
							options={CountryCode.all()}
							onChange={this.updateHomePhoneCountryCode}
							/>	
							{/*<input type="text" id="homeCountryCode" hidden={true} />*/}
						</Form.Field>
						<Form.Field width="12">
							<Form.Input name='mobileNummber' label='Home Phone Number' placeholder='Home Phone Number' />					
						</Form.Field>						
					</Form.Group>		    

					<Form.Input name='email' label='Email' placeholder='Email' type="email"/>

					<Form.Input name='date' label='Date of Birth' placeholder='dd/mm/yyyy' type="date" onChange={this.updateBirthDay}/>

					<Form.Group widths='equal'>				
						<Form.Field control={Input} label='Promocode' placeholder='Enter Promocode' name="promocode" onKeyUp={this.handlePromoCode}/>	
						<Form.Field control={Select} label='Are You a Karma Group Member?' options={optionsKarmaGroup} placeholder='Select' />
						<Form.Field control={Input} label='Odyssey Membership Number' placeholder='Odyssey Membership Number' />						
					</Form.Group>

					<Form.Field
				      control={Checkbox}
				      label={{ children: 'I agree to receive email communications & information from the Karma Club team (* Karma Club Membership Fee = $499)' }}
				    />

				    <p>* Karma Club Membership Fee = $499.</p>

				    <Button className="form-container__button-submit">Submit</Button>
				</Form>
			</Container>
		)
	}
}

export default InternalForm