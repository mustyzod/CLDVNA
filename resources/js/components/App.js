import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter as Router, Link ,Route } from 'react-router-dom';
import landingPage from './PublicPages/landingPage';
import About from './PublicPages/About';
// import AdminLogin from './AdminPages/AdminLogin';
// import Header from '../Layout/Header';
import AdminDashboard from './adminDashboard/AdminDashboard';
import ProtectedRoute from './auth/ProtectedRoute';

class App extends Component {
    constructor(props){
        super(props);
        this.state = {
            loggedIn:true,
        }
    }
    render() {
        return (
            <Router>
                <div>
                    {/* <Header checkAuth = {this.state.isLoggedIn} /> */}
                    <Route exact path="/" component={landingPage} />
                    {/* <Route 
                    path="/adminCp" 
                    render={(props) =><AdminLogin {...props} checkAuth = {this.state.isLoggedIn} />} /> */}
                    {/* <Route path="/about" component={About} /> */}
                    <ProtectedRoute path="/about" loggedIn={this.state.loggedIn} component={About} />
                    <Route path="/adminCp" component={AdminDashboard} />
                </div> 
            </Router>
        );
    }
}

const mainWelcome = {
    color:'aquamarine',
    left:'30%',
    position:'absolute',
    top:'40%',
    fontWeight: '900',
    fontSize: '80px',
}
if (document.getElementById('app')) {
    ReactDOM.render(<App/>, document.getElementById('app'));
}