import React, { Component } from 'react';
import { Link } from 'react-router-dom';

class landingPage extends Component {
  render() {
    return (
      <div style={mainStyle}>
        <h1 style={clouda}>CLOUDAVANA</h1>
        
        <Link to='/admincp'>Admin</Link> | 
        <Link to='/about'>About</Link>
      </div>
    )
  }
}

const mainStyle = {
  position:'absolute',
  left:'20%',
  top:'40%',
}
const clouda = {
  color:'aquamarine',
  fontWeight: '900',
  fontSize:'120px'
}

export default landingPage