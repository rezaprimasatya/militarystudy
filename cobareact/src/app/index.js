import React, {Component} from 'react'
import ReactDOM from 'react-dom'
// import App from './App'
import Header from './components/Header'
import App from './App'

ReactDOM.render(<Header/>, document.getElementById('header'))
ReactDOM.render(<App />, document.getElementById('content'))