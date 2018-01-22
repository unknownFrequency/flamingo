import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Klippekort from './Klippekort';

/* Main Component */
class Main extends Component {

  constructor() {
    super();

    this.state = {
      hoursMax: 0,
      hoursSpend: 0
    }
  }

  componentDidMount() {
    fetch('/api/klippekort')
      .then(response => {
        return response.json();
      })
      .then(klippekorts => {
        klippekorts.forEach((klippekort) => {
          this.setState({
            hoursMax: klippekort.hoursMax,
            hoursSpend: klippekort.hoursSpend
          });
        })
      })
      .catch(e => console.log(e));
  }


  handleClick(product) {
    //handleClick is used to set the state
    this.setState({currentProduct:product});

  }

  render() {
   console.log(this.state);
    /* Some css code has been removed for brevity */
    return (
      <div>
        <Klippekort hoursMax={this.state.hoursMax} hoursSpend={this.state.hoursSpend} />
      </div>


    );
  }
}
if (document.getElementById('main')) {
  ReactDOM.render(<Main />, document.getElementById('main'));
}
