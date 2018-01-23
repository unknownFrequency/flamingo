import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Klippekort from './Klippekort';
import UpdateForm from './UpdateForm';

class Main extends Component {
  constructor() {
    super();

    this.state = {
      klippekort: []
    };
  }

  componentWillMount() {
    // TODO: get user_id from laravel
    fetch(`/api/klippekort/`) // Same as calling KlippekortController@index == getAll()
      .then(response => response.json())
      .then(klippekorts => {
        klippekorts.forEach(klippekort => {
          this.setState({
            klippekort: {
              user_id: klippekort.user_id,
              hoursMax: klippekort.hoursMax,
              hoursSpend: klippekort.hoursSpend,
            }
          });
        });
      })
      .catch(e => console.log(e));
  }


  handleUpdate() {
    const klippekort = this.state.klippekort;

    fetch( 'api/klippekort/' + user_id, {
      method:'put',
      headers: {
        'Accept': 'application/json',
        'Content-Type': 'application/json'
      },
      body: JSON.stringify(klippekort)
    })
    .then(response => {
      return response.json();
    })
    .then(data => {
      let array = this.state.klippekort.filter(item => {
        return item !== currentProduct
      })
      this.setState({ klippekort: array.concat(klippekort) })
    }) 
  }

  render() {
    console.log(this.state.klippekort);
    if (this.state.klippekort.hoursMax && this.state.klippekort.hoursSpend) {
      return (
        <div>
          <Klippekort
            hoursMax={this.state.klippekort.hoursMax}
            hoursSpend={this.state.klippekort.hoursSpend} 
          />
          <UpdateForm 
            setState={this.setState}
            hoursMax={this.state.klippekort.hoursMax} 
            hoursSpend={this.state.klippekort.hoursSpend} 
          />
        </div>
      );
    }
    return (<div>Loading...</div>);
  }
}
if (document.getElementById('main')) {
  ReactDOM.render(<Main />, document.getElementById('main'));
}
