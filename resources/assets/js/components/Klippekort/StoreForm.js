import React, { Component } from 'react';
import PropTypes from 'prop-types';

class StoreForm extends Component {
  constructor(props) {
    super(props)

    this.state = {
      hours_max: null,
      hours_spend: null,
      to_user: null,
      selectedUser: ''
    }

    this.handleChange = this.handleChange.bind(this);
    this.handleSubmit = this.handleSubmit.bind(this);
  }

  handleChange(e) {
    this.setState({ [e.target.name]: e.target.value });
  }

  async handleSubmit(e) {
    e.preventDefault();
    const {to_user, hours_spend, hours_max} = this.state
    const responses = [200, 201];

    try {
      console.log(to_user, hours_spend, hours_max);
      let response = await fetch('api/klippekort', {
        method: 'POST',
        headers: {
          'Accept': 'application/json',
          'Content-Type': 'application/json'
        },
        body: JSON.stringify({
          to_user: to_user,
          hours_spend: hours_spend,
          hours_max: hours_max
        })
      })
      console.log(response);

      if(responses.indexOf(response.status)) {
        window.location.replace(`/klippekort`);
      } 
    } catch(e) {
      console.log(`Error: ${e}`);
    }
  }

  render() {
    const options = JSON.parse(this.props.user_ids)

    return (
      <div>
        <form onSubmit={this.handleSubmit}>
          <label>
            Bruger: 
            <select name="to_user" onChange={this.handleChange} value={this.state.to_user}>
              { 
                options.map(option  => {
                  return <option key={option.id} value={option.id}>{option.name}</option>
                })
              }
            </select>
          </label>
          <br />
          <label>
              Antal support timer:
              <input type="text" 
                name="hours_max"
                value={this.state.hours_max} 
                onChange={this.handleChange} 
              />
          </label>
          <br />
          <label>
            Antal timer brugt:
              <input type="text" 
                name="hours_spend"
                value={this.state.hours_spend} 
                onChange={this.handleChange} 
              />
          </label>
          <br />
          <input type="submit" value="Submit" />
        </form>
      </div>
    );
  }
}


StoreForm.propTypes = {
  user_ids: PropTypes.string.isRequired,
};

export default StoreForm;
