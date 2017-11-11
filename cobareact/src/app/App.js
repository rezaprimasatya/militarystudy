import React, {Component} from 'react'
import Slideshow from './components/Slideshow'
import image1 from './assets/images/ss/ss1.jpg'
import image2 from './assets/images/ss/ss2.jpg'
import image3 from './assets/images/ss/ss3.jpg'
import './assets/css/body.css'
import Greetings from './components/Greetings'

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
      </div>
    )
  }
}

export default App