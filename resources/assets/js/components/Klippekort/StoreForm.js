import React, { Component } from 'react';
import PropTypes from 'prop-types';

class StoreForm extends Component {
  constructor(props) {
    super(props);

    this.state = {
      hours_max: null,
      hours_spend: null,
      to_user: null,
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

      if(responses.indexOf(response.status)) {
        window.location.replace(`/klippekort/${to_user}`);
      } 
    } catch(e) {
      console.log(`Error: ${e}`);
    }
  }

  render() {
    const { user_id, csrf_token } = this.props;

    return (
      <div>
        <form onSubmit={this.handleSubmit}>
          <input type="hidden" name="_token" value={csrf_token} />
          <label>
            Bruger: 
            <input type="text" 
              name="to_user"
              value={this.state.user_id} 
              onChange={this.handleChange} 
            />
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
  user_id: PropTypes.string.isRequired,
};

export default StoreForm;
