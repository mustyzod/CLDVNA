import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter as Router, Link ,Route } from 'react-router-dom';
import landingPage from './PublicPages/landingPage';
import AdminLogin from './AdminPages/AdminLogin';
import Header from '../Layout/Header';

class App extends Component {
    constructor(props){
        super(props);
        this.state = {
            isLoggedIn:false,
        }
    }
    render() {
        return (
            <Router>
                <div>
                    <Header checkAuth = {this.state.isLoggedIn} />
                    <Route exact path="/" component={landingPage} />
                    <Route 
                    path="/adminCp" 
                    render={(props) =><AdminLogin {...props} checkAuth = {this.state.isLoggedIn} />} />
                </div> 
            </Router>
        );
    }
}

if (document.getElementById('app')) {
    ReactDOM.render(<App/>, document.getElementById('app'));
}