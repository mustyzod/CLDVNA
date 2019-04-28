    // resources/assets/js/components/App.js

    import React, { Component } from 'react';
    import ReactDOM from 'react-dom';
    import { BrowserRouter, Route, Switch } from 'react-router-dom';
    import Header from './Header';
    import NewProduct from './NewProduct';
    import ProductsList from './ProductsList';
    import AdminDashboard from '.adminDashboard/AdminDashboard';

    class App extends Component {
        render() {
            return ( <BrowserRouter >
                <div >
                <Header/>
                <Switch>
                    <Route exact path='/' component={ProductsList} />
                    <Route path='/admincp' component={AdminDashboard} />
                    <Route path='/create' component={NewProduct} />
                </Switch>
                </div> </BrowserRouter >
            )
        }
    }

    ReactDOM.render( < App/ > , document.getElementById('app'));