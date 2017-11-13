import React, {Component} from 'react'
import Slideshow from './components/Slideshow'
import image1 from './assets/images/ss/ss1.jpg'
import image2 from './assets/images/ss/ss2.jpg'
import image3 from './assets/images/ss/ss3.jpg'
import './assets/css/body.css'
import Greetings from './components/Greetings'
import TermsAndConditions from './components/TermsAndConditions'

class App extends Component{
  render(){
    return(
      <div>
        <Slideshow 
        images={
        	[
	        	image1,
	        	image2,
	        	image3
        	]
        } 
        titles={
    		[
    			'We Create',
    			'We Create',
    			'We Create'
			]
    	} 
        captions={
        	[
	        	'experience',
	        	'experience',
	        	'experience'
        	]

        }/>
        <Greetings 
        title ="Welcome to Karma Group" 
        promoName ="CITY A.M. EXCLUSIVE" 
        subTitle = {
        	[
        		"WIN A KARMA HOLIDAY",
        		"PLUS FREE KARMA CLUB MEMBERSHIP" 
        	]
        }		
		texts={
			[
				"Karma Group is an award-winning international travel and lifestyle brand offering extraordinary experiences and exclusive curated entertainment in the world’s most beautiful locations. From soulful spas to happening beach parties, historic hotels to design resorts, Karma Group is created for five-star travellers who understand that reaching their destination is only the start of their journey.",
				"For your chance to win 7 nights stay at one of our Karma Resorts or Retreats, simply register below for a Karma Club Membership, and we will pick a winner daily. It’s free for City A.M. readers (usually $499), and is a members club with a difference - no strings, no stuffiness, just a superb way to enjoy a little more Karma in your life. Karma Club is your opportunity to immerse yourself in the experiences we offer, while enjoying exclusive, members-only benefits.",
				"Karma Club Members receive automatic VIP access to parties and events, exclusive discounts and offers, plus luxurious extras including automatic upgrades and concierge service. For a full list of benefits see below."
			]
		}/>

		<TermsAndConditions 
		title="Karma Club benefits include"
		terms={
			[
				"25% off Karma’s best rate for all accommodation at Karma Group resorts worldwide (K). If you can find a better comparable rate published elsewhere we will still give you 25% discount from that rate",
				"Further amazing discounts at thousands of branded resorts around the world",
				"3 x US$100 vouchers against accommodation of 3 nights or more. One voucher per stay (K)",
				"25% off all Food & Beverage, Spa and other onsite services (K)",
				"Automatic upgrade to best available rooms or villas at check-in (K)",
				"Late check-out (4 hours) (K)",
				"Access to VIP Members-Only parties, lifestyle and networking events",
				"Free exclusive gift pack at check-in (K)",
				"Free kids club and babysitting where this onsite service is available (K)",
				"Free Karma Beach membership",
				"Free CD's and downloads of bespoke Karma playlists composed by resident DJ's",
				"24-hour Concierge membership advice, travel and lifestyle planning",
				"Regular Member Newsletters with further offers and savings",
				"Mobile updates via the Karma app – currently in development"
			]
		}
		conditions="(K) – Only applicable at Karma Group properties."
		/>

		<TermsAndConditions 
		title="TERMS AND CONDITIONS FOR PROMOTION"
		terms={
			[
				"Closing dates and times: Draw 1: Tues 17th January 2017 at 1pm. Draw 2: Weds 18th January 2017 at 1pm. Draw 3: Thurs 19th January 2017 at 1pm. Draw 4: Fri 20th January 2017 at 11.59pm.",
				"To enter: Simply complete the form above.",
				"To sign up to Karma Club is free but you must be 18 or over, membership is for 12 months.",
				"The daily winner will be selected at random. All entries will roll to the next draw.",
				"There are 4 x prizes to be won, drawn daily at the times above.",
				"We will contact you via email/telephone to let you know if you are a winner.",
				"We will require a response within 48 hours to accept the prize.",
				"Each prize consists: A voucher for 7 nights’ accommodation for 4 people at any Karma Group Resort worldwide.",
				"Vouchers valid until 30 April 18; excludes flights; 25% off food and beverages. Excludes 23-31 December 2017; 1-5 January 2018; 30 March - 3 April 2018; 23-30 June 2018.",
				"Booking is subject to availability.",
				"There are no cash alternatives and prizes are non-transferable."
			]
		}		
		/>
      </div>
    )
  }
}

export default App