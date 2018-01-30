import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import ColorCard from './ColorCard';
import Rainbow from 'rainbowvis.js';
import UpdateForm from './UpdateForm'

class Klippekort extends Component {
  constructor(props) {
    super(props);

    this.state = {
      id: false,
      user_id: false,
      hours_max: false,
      hours_spend: false
    }
  }

  componentWillMount() {
    this.setState({
      id: this.props.id,
      user_id: this.props.user_id,
      hours_max: this.props.hours_max,
      hours_spend: this.props.hours_spend
    })
  }

  percentLeft(hoursspend, hoursmax) {
    const remainder = hoursmax - hoursspend;
    return (remainder / hoursmax) * 100;
  }

  getColors(percentLeft) {
    const numOfItems = 100;
    const numOfItemsGreyed = numOfItems - percentLeft;
    const rainbow = new Rainbow();
    rainbow.setNumberRange(1, numOfItems);
    rainbow.setSpectrum('green', 'tomato');
    const colors = [];

    for (let i = 1; i <= numOfItems; i++) {
      if (i < numOfItemsGreyed) {
        colors.push('#999');
      } else {
        const hexColour = rainbow.colourAt(i);
        colors.push(`#${hexColour}`);
      }
    }
    return colors;
  }


  updateHours(hours_max, hours_spend) {
    console.log(hours_spend, hours_max);
    this.setState({ hours_max, hours_spend }, () => console.log(this.state));
  }

  render() {
    const { id, user_id, hours_spend, hours_max } = this.state;
    const percentLeft = this.percentLeft(hours_spend, hours_max);
    const colors = this.getColors(percentLeft);
    const colorCards = colors.map((color, i) => {
      const style = {
        width: '100px',
        height: '3px',
        marginLeft: '40%',
        backgroundColor: color,
      };
      return <ColorCard key={`colorcard-${i}`} style={style} />;
    });
    return (
      <div>
        <br />
        <h1>Service klippekort</h1>
        <UpdateForm
          id={Number(id)}
          user_id={Number(user_id)}
          hours_spend={Number(hours_spend)}
          hours_max={Number(hours_max)}
          updateHours={this.updateHours.bind(this)}
        />
        {colorCards}
        <p className="text-center" style={{}}>Timer tilbage: {hours_max - hours_spend}</p>
      </div>
    );
  }
}

export default Klippekort;
