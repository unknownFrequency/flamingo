import React, { Component } from 'react';
import PropTypes from 'prop-types';

class UpdateForm extends Component {
  constructor(props) {
    super(props);
    this.state = {
      id: false,
      user_id: false,
      hours_max: false,
      hours_spend: false
    };

    this.handleChange = this.handleChange.bind(this);
    this.handleSubmit = this.handleSubmit.bind(this);
  }

  componentWillMount() {
    this.setState({
      id: this.props.id,
      user_id: this.props.user_id,
      hours_max: this.props.hours_max,
      hours_spend: this.props.hours_spend,
      updateHours: this.props.updateHours
    });
  }

  handleChange(e) {
    this.setState({ [e.target.name]: e.target.value });
  }

  async handleSubmit(e) {
    e.preventDefault();
    const {id, user_id, hours_spend, hours_max, updateHours} = this.state
    try {
      let response = await fetch(`/api/klippekort/${id}`, {
        method: 'PUT',
        headers: {
          'Accept': 'application/json',
          'Content-Type': 'application/json'
        },
        body: JSON.stringify({
          to_user: user_id,
          id,
          hours_spend,
          hours_max
        })
      })
      if(response.status === 200) {
        console.log(response);
        updateHours(hours_max, hours_spend);
        // window.location.replace(`/klippekort`);
      }
    } catch(e) {
      console.log(`Error: ${e}`);
    }
  }

  render() {
    return (
      <div>
        <form onSubmit={this.handleSubmit}>
          <label>
              Antal support timer:
              <input type="text" 
                name="hours_max"
                value={this.state.hours_max} 
                onChange={this.handleChange} 
              />
              <input type="text" 
                name="hours_spend"
                value={this.state.hours_spend} 
                onChange={this.handleChange} 
              />
          </label>
          <input type="submit" value="Submit" />
        </form>
      </div>
    );
  }
}


UpdateForm.propTypes = {
  id: PropTypes.number.isRequired,
  user_id: PropTypes.number.isRequired,
  hours_max: PropTypes.number.isRequired,
  hours_spend: PropTypes.number.isRequired,
  updateHours: PropTypes.func.isRequired,
};

export default UpdateForm;
