import React, {Component} from 'react'
import Slideshow from './components/Slideshow'
import image1 from './assets/images/ss/ss1.jpg'
import image2 from './assets/images/ss/ss2.jpg'
import image3 from './assets/images/ss/ss3.jpg'
import './assets/css/body.css'

class App extends Component{
  render(){
    return(
      <div>
        <Slideshow images={[image1,image2,image3]} titles={['We Create','We Create','We Create']} captions={['experience','experience','experience']}/>
        {/*<Slideshow images={[image1]} titles={['We Create']} captions={['experience']}/>*/}
      </div>
    )
  }
}

export default App