import React, { Component } from 'react'
import { Container,Col } from 'reactstrap';
import { allSettled } from 'q';
import { PropTypes } from 'prop-types';

class AdminLogin extends Component {
  constructor(props) {
    super(props);
    this.state = {
      email : '',
      password : '',
      checkAuth:false,
      warning:null,
    };

  //   this.state = {
  //     isLoggedIn: false,
  //     user: {},
  //     value: '',
  //     email:'',
  //     password:''
  //  };

    this.handleChange = this.handleChange.bind(this);
    this.handleSubmit = this.handleSubmit.bind(this);
  }
  handleChange (e) {
    // const name=e.target.name;
    // for checkbox
    // const value = target.type === 'checkbox' ? target.checked : target.value;
    // const value=e.target.value.toUpperCase();
    // const value=e.target.value;
    this.setState({
        [e.target.name]:e.target.value
      }
    );
    // console.log(this.state);
  }

  handleSubmit(e){
      axios.get('/api/first')
        .then(res => {
          const persons = res.data;
          console.log(persons);
          // this.setState({ persons });
        })
    // alert('A name was submitted: ' + this.state.value);
    e.preventDefault();
  }



  render() { 
    return (
      <React.Fragment>
        <Container>
            <div className="row" style={LoginStyle}>
            <Col md={{ span: 12, offset: 4 }}>
                <div className="panel panel-default">
                  <div className="panel-heading">
                    <h3 className="panel-title">Please sign in</h3>
                </div>
                  <div className="panel-body">
                    <form acceptCharset="UTF-8" role="form"  onSubmit={this.handleSubmit}>
                            <fieldset>
                        <div className="form-group">
                          <input 
                            className="form-control" 
                            style={InputStyle} 
                            placeholder="E-mail" 
                            name="email" 
                            type="text" 
                            value={this.state.email} 
                            onChange={this.handleChange}
                          />
                      </div>
                      <div className="form-group">
                        <input 
                          className="form-control" 
                          placeholder="Password" 
                          name="password" 
                          type="password" 
                          value={this.state.value} 
                          onChange={this.handleChange}
                        />
                      </div>
                      <div className="checkbox">
                          <label>
                            <input name="remember" type="checkbox" value="Remember Me"/> Remember Me
                          </label>
                        </div>
                      <input className="btn btn-lg btn-success btn-block" type="submit" value="Submit"/>
                    </fieldset>
                      </form>
                  </div>
              </div>
            </Col>
          </div>
        </Container>
      </React.Fragment>
    )
  }
}

const LoginStyle = {
  marginTop: '80px',
  marginBottom: '80px',
  padding:'10px'
}

const InputStyle = {
  width:'350px',
}
export default AdminLogin